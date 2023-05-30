
<h1>welcomr {{$arb['id']}}  {{$arb['nom']}}</h1>
<a href="{{"/paye/".$arb['id']}}">paye</a>
<a href="{{"/myDesign/".$arb['id']}}">design</a>
<a href="/report">rpport</a>



@foreach($rencontres as $rencontre)
    <h1>Welcome {{ $rencontre->date }}</h1>
@endforeach