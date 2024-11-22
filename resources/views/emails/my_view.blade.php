<!DOCTYPE html>
<html>
<head>
    <title>Email from {{ $data['name'] }}</title>
</head>
<body>
    <h1>Hello, {{ $data['name'] }} {{ $data['lastname'] }}</h1>
    <p>Here are the details:</p>
    <ul>
        <li>Email: {{ $data['email'] }}</li>
        <li>Phone: {{ $data['phone'] }}</li>
        <li>Beneficiary: {{ $data['beneficiare'] }}</li>
        <li>Address: {{ $data['address'] }}</li>
    </ul>
    <p>Thank you!</p>
</body>
</html>
