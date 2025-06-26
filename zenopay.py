import requests

url = "https://zenoapi.com/api/payments/walletcashin/process/"
headers = {
    "Content-Type": "application/json",
    "x-api-key": "YOUR_API_KEY"
}
data = {
    "transid": "7pbBX-lnnASw-erwnn-nrrr09AZ",
    "utilitycode": "CASHIN",
    "utilityref": "0744963858",
    "amount": 3000,
    "pin": 0000  # Use your actual pin here, e.g., 0000
}

response = requests.post(url, json=data, headers=headers)
print(response.json())
