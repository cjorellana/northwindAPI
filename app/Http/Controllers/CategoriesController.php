<?php namespace App\Http\Controllers;

use App\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
	public function index()
	{
		$categories = Categories::all();
		return response()->json($categories, 200);
		//return response()->json("hola", 200);
	}

	public function getCategories($id)
	{
		$categoria = Categories::find($id);
		if($categoria)
		{
			return response()->json($categoria, 200);
		}

		return response()->json(["Categoria no encontrado"], 404);

	}

	 public function createCategories(Request $request)
	 {
        $categoria = Categories::create($request->all());  
        return response()->json($categoria,201);  
    }
}
