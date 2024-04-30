<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bullein de Paie</title>
</head>
<body>

<h1> Bulletin de paie de {{ $salarie->nom }} {{ $salarie->prenom }} </h1>




<table id="payStubTable">
  <thead>
    <tr>
      <th><strong>CIN</strong> </th>
      <th><strong>Numero CNSS</strong></th>
      <th><strong>Numero AMO </strong> </th>
      <th><strong>Numero CIMR</strong> </th>
    
      
   
    </tr>
  </thead>
  <tbody>
    <tr>
      <td> {{ $salarie->cin }} </td>
      <td> {{ $salarie->num_cnss }}</td>
      <td>{{ $salarie->num_amo }} </td>
      <td>{{ $salarie->num_cimr }}</td>
      
      
     
    </tr>
  </tbody>
</table>


<br>

<br>

<table id="payStubTable">
  <thead>
    <tr>
      
      <th><strong>Nom</strong></th>
      <th><strong>Prenom</strong> </th>
      <th><strong>Departement:</strong> </th>
      <th><strong>Mission</strong> </th>
      
      
   
    </tr>
  </thead>
  <tbody>
    <tr>
      
      <td> {{ $salarie->nom }}</td>
      <td>{{ $salarie->prenom }} </td>
      <td> {{ $salarie->departement }} </td>
      <td>{{ $salarie->mission }}</td>
      
      
     
    </tr>
  </tbody>
</table>



<br>

<br>

<table id="payStubTable">
  <thead>
    <tr>
      
      <th><strong>Salaire de base:</strong></th>
      <th><strong>des heures supplémentaires:</strong> </th>
      <th><strong>des absences non justifiees:</strong> </th>
      <th><strong>Cotisation CNSS:</strong> </th>
   
    </tr>
  </thead>
  <tbody>
    <tr>
      
      <td>{{ $salaire_base }}</td>
      <td>{{ $heures_supplementaires }}</td>
      <td>{{ $conges_medicaux }}</td>
      <td>{{ $cotisation_cnss }}</td>
      
     
    </tr>
  </tbody>
</table>




<br>

<br>


<table id="payStubTable">
  <thead>
    <tr>
      <th><strong>Cotisation AMO:</strong> </th>
      <th><strong>Cotisation CIMR:</strong> </th>
    
      <th>Montant des primes:</strong> </th>
      <th>Salaire Net:</strong> </th>
    
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{ $cotisation_amo }}</td>
      <td>{{ $cotisation_cimr }}</td>
      <td>{{ $prime }}</td>
      <td>{{ $salaire_net }}</td>
      
                
     
    </tr>
  </tbody>
</table>
  
</body>
</html>

<style>
  h1{
    text-align:center;
  }

#payStubTable {
  border-collapse: collapse;
  width: 100%;
}

#payStubTable th,
#payStubTable td {
  border: 1px solid black;
  padding: 8px;
  text-align: left;
}

#payStubTable th {
  background-color: #f2f2f2;
}

</style>