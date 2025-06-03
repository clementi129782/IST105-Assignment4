# calculator/views.py

from django.shortcuts import render
from django.http import JsonResponse
from . import calculate

def calculator_form(request):
    return render(request, 'calculator/form.html')

def process_numbers(request):
    if request.method == 'POST':
        a = request.POST.get('a')
        b = request.POST.get('b')
        c = request.POST.get('c')
        result = calculate.calculate(a, b, c)
        return JsonResponse({'result': result})
    return JsonResponse({'error': 'Invalid request'}, status=400)
