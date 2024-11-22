<!DOCTYPE html>
<html>
<head>
    <title>Email de {{ $data['name'] }} pour l'administration</title>
</head>
<body>
    <h1>Bonjour Admin,</h1>
    <p>Voici les données d'inscription à la plateforme :</p>
    <ul>
        <li><strong>Nom :</strong> {{ $data['name'] }} {{ $data['lastname'] }}</li>
        <li><strong>Email :</strong> {{ $data['email'] }}</li>
        <li><strong>Téléphone :</strong> {{ $data['phone'] }}</li>
        <li><strong>Bénéficiaire :</strong> {{ $data['beneficiare'] }}</li>
        <li><strong>Adresse :</strong> {{ $data['address'] }}</li>
    </ul>

    <!-- Conditionally show vehicle details if 'mark' is not null -->
    @if(!empty($data['mark']))
        <p><strong>Détails du véhicule :</strong></p>
        <ul>
            <li><strong>Marque :</strong> {{ $data['mark'] }}</li>
            <li><strong>Modèle :</strong> {{ $data['model'] }}</li>
            <li><strong>Couleur :</strong> {{ $data['color'] }}</li>
            <li><strong>Immatriculation :</strong> {{ $data['registration'] }}</li>
            <li><strong>Kilométrage :</strong> {{ $data['mileage'] }}</li>
        </ul>
    @endif

    <p>Merci de prendre en compte cette inscription.</p>
</body>
</html>
