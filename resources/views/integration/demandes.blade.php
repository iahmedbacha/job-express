<!DOCTYPE html>
<html>
<head>
	<title>Tous les demandes</title>
</head>
<body>
	<form action="{{ action('DemandeController@filter') }}" method="post">
		 {{ csrf_field() }}
		<SELECT  type="text" name="categorie" size="1">
			<option name="categorie" value="Demenagement">demenagement</option>
			<option name="categorie" value="Bricolage">Bricolage</option>
		</SELECT>
		
		<button type="submit" >Filtrer</button>
	</form>
	
		@foreach ($demandes as $demande)
			<h3>Titre : <a href="demandeInfo/{{ $demande->id }}">{{ $demande->titre }}</a></h2>
			<h3>{{ $demande->utilisateur->nom }} {{ $demande->utilisateur->prenom }}</h3>
			<h3>Categorie : {{ $demande->categorie }}</h3>
			<h3>Lieu : {{ $demande->lieu }}</h3>
			<h3>Montant : {{ $demande->montant }}</h3>
			<h3>Date de publication : {{ $demande->datePub }}</h3>
			<h3>Date de travaille : {{ $demande->dateService }}</h3>
			<h3>Description :</h3>
			<p>{{ $demande->description }}</p>
		@endforeach
</body>
</html>