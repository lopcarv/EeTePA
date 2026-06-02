import requests
from config import API_URL, API_TOKEN

def buscar_produtos():
    headers = {"Authorization": API_TOKEN}
    response = requests.get(API_URL, headers=headers)
    return response.json()