<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SportShoe;



class SportShoeController extends Controller
{
  public function index()
  {
      $sportShoes = SportShoe::all();
      return view('sportshoes.index', compact('sportShoes'));
  }

  public function addShoe(Request $request)
  {
      if ($request->isMethod('post')) {
          $validatedData = $request->validate([
              'brand' => 'required|string|max:255',
              'model' => 'required|string|max:255',
              'size' => 'required|integer|min:1',
              'color' => 'required|string|max:255',
          ]);

          $shoe = new SportShoe();
          $shoe->brand = $validatedData['brand'];
          $shoe->model = $validatedData['model'];
          $shoe->size = $validatedData['size'];
          $shoe->color = $validatedData['color'];
          $shoe->mileage = 0; // Set initial mileage to 0
          $shoe->save();

          return redirect()->route('sportshoes.index')->with('success', 'Shoe added successfully!');
      }

      return view('sportshoes.add_shoe');
  }
}