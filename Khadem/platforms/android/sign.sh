keytool -genkey -v -keystore khadem-key.keystore -alias Khadem -keyalg RSA -keysize 2048 -validity 10000
jarsigner -verbose -sigalg SHA1withRSA -digestalg SHA1 -keystore khadem-key.keystore HelloWorld-release-unsigned.apk Khadem

