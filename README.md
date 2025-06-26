

```markdown
# 📤 ZenoPay Mobile Disbursements API

Use this endpoint to send mobile wallet disbursements from ZenoPay to customers. This API is designed for secure, fast, and automated fund transfers using your ZenoPay wallet balance.

---

## ✅ Endpoint

```

POST [https://zenoapi.com/api/payments/walletcashin/process/](https://zenoapi.com/api/payments/walletcashin/process/)

````

---

## 🔐 Authentication

Use your API Key in the request headers:

```http
x-api-key: YOUR_API_KEY
Content-Type: application/json
````

---

## 📨 Request Body

Send a JSON payload with the following fields:

| Field         | Type    | Required | Description                                                |
| ------------- | ------- | -------- | ---------------------------------------------------------- |
| `transid`     | string  | ✅ Yes    | Unique transaction ID (e.g., UUID) to prevent duplication. |
| `utilitycode` | string  | ✅ Yes    | Set to `"CASHIN"` for disbursements.                       |
| `utilityref`  | string  | ✅ Yes    | Mobile number to receive the funds (e.g., `0744963858`).   |
| `amount`      | integer | ✅ Yes    | Amount to send in Tanzanian Shillings (TZS).               |
| `pin`         | integer | ✅ Yes    | 4-digit wallet PIN to authorize the transaction.           |

---

### 📦 Example Request

```json
{
  "transid": "7pbBX-lnnASw-erwnn-nrrr09AZ",
  "utilitycode": "CASHIN",
  "utilityref": "0744963858",
  "amount": 3000,
  "pin": 2019
}
```

---

## ✅ Success Response

```json
{
  "status": "success",
  "message": "Disbursement processed successfully",
  "data": {
    "transid": "7pbBX-lnnASw-erwnn-nrrr09AZ",
    "amount": 3000,
    "utilityref": "0744963858",
    "status": "completed",
    "timestamp": "2025-06-26T16:30:00+0300"
  }
}
```

---

## ❌ Error Responses

**Invalid PIN**

```json
{
  "status": "error",
  "message": "Invalid PIN. Please try again."
}
```

**Insufficient Balance**

```json
{
  "status": "error",
  "message": "Insufficient wallet balance."
}
```

**Missing or Invalid Parameters**

```json
{
  "status": "error",
  "message": "Validation failed",
  "errors": {
    "utilityref": ["This field is required."]
  }
}
```

---

## 🔄 Idempotency

* `transid` should be **unique** for each transaction.
* Reusing the same `transid` will return the **same response** to ensure safe retries.

---

## 🛡️ Security Notes

* Never expose your `x-api-key` or `pin` on the frontend.
* Only communicate over HTTPS (default with `zenoapi.com`).
* Rotate your API keys regularly for better security.

---

## 📞 Support

Need help? Contact the ZenoPay support team via WhatsApp or email [support@zenoapi.com](mailto:support@zenoapi.com).

---

```

```
