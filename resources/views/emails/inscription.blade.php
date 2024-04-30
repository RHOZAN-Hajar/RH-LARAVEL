<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <title>Confirmation de Email</title>
</head>
<body>
<div class="container">
    BTRzone
        
        <h3>Bonjour {{ $nom }} </h3>
        <a href="{{ $href }}" class="btn btn-primary">confirmer votre email</a>
</div>
        
  
</body>
</html>