<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControlloreTrallallinoTrallallero extends Controller
{
  public function index() {
    $cds = [
      ['<img src="https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg" />','<h3>New Jersey</h3>','<small>Bon Jovi</small>','<strong>1988</strong>'],
      ['<img src="https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg" />', '<h3>Live at Wembley 86</h3>','<small>Queen</small>','<strong>1992</strong>'],
      ['<img src="https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg" />','<h3>Ten\'s Summoner\'s Tales</h3>','<small>Sting</small>','<strong>1993</strong>'],
      ['<img src="https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg" />','<h3>Steve Gadd band</h3>','<small>Steve Gadd Band</small>','<strong>2018</strong>'],
      ['<img src="https://i.ebayimg.com/images/g/1GwAAOSwFytaKr7l/s-l300.jpg" />','<h3>Brave new World</h3>','<small>Iron Maiden</small>','<strong>2000</strong>'],
      ['<img src="https://images-na.ssl-images-amazon.com/images/I/81MDAIdh78L._SY355_.jpg" />','<h3>One more car, one more rider</h3>','<small>Eric Clapton</small>','<strong>2002</strong>']
    ];
    return view('home.index', compact('cds'));
  }
}
