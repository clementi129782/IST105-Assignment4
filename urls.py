from django.urls import path
from . import views

urlpatterns = [
    path('', views.calculator_form, name='calculator_form'),
    path('process/', views.process_numbers, name='process_numbers'),
]