def datetime_context_processor(request):
    from datetime import datetime
    return {
        'now': datetime.now()
    }
