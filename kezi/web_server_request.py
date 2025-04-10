import requests

url = 'https://example.com' 
response = requests.get(url)

if response.status_code == 200:
    print(response.text)  
else:
    print('失敗:', response.status_code)
