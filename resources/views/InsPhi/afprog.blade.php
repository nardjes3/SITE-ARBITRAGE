<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="/css/insPhiCss/index.css">
  </head>

@if(!$programmes->isEmpty())
    <div class="table-container">
      <table>
        <h2 class="table-caption">Semaine {{ $programmes[0]->semaines }}</h2>
       
        <thead>
          <tr>
            <th>Jour</th>
            <th>Activité</th>
          </tr>
        </thead>
        <tbody>
          @foreach($programmes as $programme)
            <tr>
              <td>{{ $programme->jour }}</td>
              <td>{{ $programme->activite }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    
    @foreach($autresProgrammes as $programmes)
      <div class="table-container">
        <table>
          <h2 class="table-caption">Semaine {{ $programmes[0]->semaines }}</h2>
          <thead>
            <tr>
              <th>Jour</th>
              <th>Activité</th>
            </tr>
          </thead>
          <tbody>
            @foreach($programmes as $programme)
              <tr>
                <td>{{ $programme->jour }}</td>
                <td>{{ $programme->activite }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    @endforeach
@endif
<div class="background-image" style="background-image: url(/images/imgesInsPhi/q.jpg);"></div>
   
</html>
