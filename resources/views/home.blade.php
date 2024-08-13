@extends('layouts.base')
@section('title', 'Accueil')
@section('contenu')
<div  class="bg-fixed bg-cover bg-center bg-no-repeat h-screen flex-col flex items-center space-y-36 p-11"
style="background-image:url('https://caffecreole.com/wp-content/uploads/2019/07/restaurant-caffe-creole2.jpg')">
<div class="flex flex-col h-4/4 h-full w-screen p-5 items-center bg-white">
    <p class="text-4xl font-bold text-gray-900 dark:text-white p-1">Kay Dédé</p>
        <img src="/images/plat1.jpg" alt="" class="w-3/6">
        <p class="text-4xl font-medium text-gray-900 dark:text-white p-5">Le restaurant Kay Dédé a ouvert ses portes en 2022.
        Depuis lors, nous nous efforçons de proposer à nos clients une expérience culinaire authentique et mémorable. 
       Notre passion pour la cuisine Antillaise se ressent dans chaque plat que nous servons.</p>

</div>
<div class="flex w-screen p-10 items-center bg-white m-11">
 <img src="\images\cuisinier.webp" alt="" srcset="" class="w-3/6">

 <p class="text-4xl font-medium text-gray-900 dark:text-white p-10">
    Notre restaurant, nous privilégions les circuits courts et les produits frais, locaux et de saison afin de vous proposer une cuisine de qualité. Chaque menu est élaboré par nos chefs et cuisiné sur place par toute l’équipe restauration. Des menus à thèmes sont régulièrement élaborés selon les saisons et fêtes durant toute l’année et pour le plus grand plaisir des papilles de nos résidents.
 </p>
</div>
</div>

@endsection




