<?php

/* echo e print auxilia ao mostrar texto na tela 
echo 'canal ti';  
print 'Canal ti2' */

//var_dump alem de exibir o texto ele exibe o valor da variavel e a quantidade de palavras 
//var_dump('Canal ti2');
namespace App\Http\Livewire;
 
use Livewire\Component;
 
class Counter extends Component
{
    public $count = 0;
 
    public function increment()
    {
        $this->count++;
    }
 
    public function render()
    {
        return view('livewire.counter');
    }
}

?>