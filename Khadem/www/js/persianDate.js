(function(){
		var leap = ( (gYear-2013)%4 == 0 ) ? 20 : 21;
		var esfand = ( (gYear-2013)%4 == 0 ) ? 30 : 29;
		var gArray = [31,28,31,30,31,30,31,31,30,31,30,31];
		var pArray = [31,31,31,31,31,31,30,30,30,30,30,esfand];
		var weekNames = ['یکشنبه' , 'دوشنبه' , 'سه شنبه' , 'چهارشنبه' , 'پنج شنبه' , 'آدینه' , 'شنبه']
		var monthNames = ['روردین' , 'اردیبهشت' , 'خرداد' , 'تیر' , 'مرداد' , 'شهریور' , 'مهر' , 'آبان' , 'آذر' , 'دی' , 'بهمن' , 'اسفند']
		var passedDayes = 0;
		var gDate = null;
		gDate = new Date();
		var gDay = gDate.getDate();
		var gMonth = gDate.getMonth()+1;
		var gYear = gDate.getFullYear();
		function createDate()
		{
			window.persianDate = 
			{
				year: 0,
				month: 0,
				day: 0,
				
			}
				
			//check if we're in new persian year or not
			function nextYear()
			{
				if( gMonth<=2)
				{
					return false;
				}
				else if(gMonth == 3 && gDay < leap)
				{
					return false;
				}
				else
				{
					return true;
				}
			}
			
			if(nextYear() )
			{

				//define the year
				persianDate.year = gYear - 621;
				//define the persian month and day
				for(var i=2 ; i <= gMonth-2 ; i++)
				{
					passedDayes+= gArray[i];
				}
				passedDayes = passedDayes + gDay - leap+1;
				i = 0;
				while(passedDayes > 0)
				{
					passedDayes -= pArray[i];
					persianDate.month +=1;
					i++;
				}
				persianDate.month;
				persianDate.day = pArray[persianDate.month] + passedDayes;
			}
			else
			{
				//define the year
				persianDate.month = gYear - 622;
				//define the persian month and day
				for(var i=0 ; i <= gMonth-2 ; i++)
				{
					passedDayes+= gArray[i];
				}
				passedDayes += gDay;
				//after defining the number of days passed from georgian year
				// we need to dubtract it from the number of days between Persian and Georgian new years
				// 31(jan) + 28(feb) + leap -1(the leap day itself)
				passedDayes = 58 + leap - passedDayes;
				i = 11;//last month in array
				while(passedDayes > 0)
				{
					passedDayes -= pArray[i];
					persianDate.month = i+1;
					i--;
				}
				if(passedDayes == 0)
				{
					persianDate.month --;
					persianDate.day = pArray[persianDate.month-1];
				}
				else
				{
					persianDate.day = passedDayes*-1;
				}
			}
		}//createDate
		createDate();
		///Methods
		//I've tried to make these methods similar to those in javascript Date object
		persianDate.getDate = function()
		{
			return persianDate.day;
		}
		persianDate.getDay = function(type)
		{
			var dayInWeek = gDate.getDay();
			
			return (type === 'name') ? weekNames[dayInWeek] : dayInWeek;
		}
		persianDate.getMonth = function(type)
		{
			return (type === 'name') ? monthNames[persianDate.month-1] : persianDate.month;
		}
		persianDate.getYear = function(type)
		{
		
			return (type === 'short') ? (persianDate.year % 100) : persianDate.year;
		}
		persianDate.getFullDate = function()
		{
			var temp = {'year' : persianDate.year , 'month' : persianDate.month , 'day' : persianDate.day};
			return temp;
		}
		persianDate.toJSON = function()
		{
			return (persianDate.year +'/'+ persianDate.month +'/'+ persianDate.day);
		}	
			
			//now we have number of days passed from georgian year.
            
	})();