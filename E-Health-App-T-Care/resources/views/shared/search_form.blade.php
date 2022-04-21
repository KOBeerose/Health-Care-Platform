<div class="search_form">
  <h2>Trouvez un médecin</h2>
  <form action="/medecins">
    <input type="text" name="s" class="form-control" placeholder="Par example: adam generaliste rabat" value="{{ app('request')->input('s') }}">
    <button type="submit" class="btn btn-primary">Rechercher</button>
  </form>
</div>
