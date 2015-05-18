<?php

use Agrosistemas\Storage\Crop\CropRepositoryInterface;

class CropController extends BaseController 
{
	/**
	 * Crop repository.
	 *
	 * @var \Agrosistemas\Storage\Crop\CropRepositoryInterface
	 */
	protected $crop;

	/**
	 * Initializes model instance variables.
	 *
	 * @var \Agrosistemas\Storage\Crop\CropRepositoryInterface $crop
 	 * @return void
	 */
	public function __construct(CropRepositoryInterface $crop)
	{
		$this->crop = $crop;
	}

	/**
	 * Display a listing of crops
	 *
	 * @return Response
	 */
	public function index()
	{
		$crops = $this->crop->all();

		return View::make('crops.index', compact('crops'));
	}

	/**
	 * Show the form for creating a new crop
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('crops.create');
	}

	/**
	 * Store a newly created crop in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), $this->crop->$rules);

		if ($validator->fails())
		{
			return Redirect::back()
				->withErrors($validator)
				->withInput();
		}

		$this->crop->create($data);

		return Redirect::route('crops.index');
	}

	/**
	 * Display the specified crop.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$crop = $this->crop->findOrFail($id);

		return View::make('crops.show', compact('crop'));
	}

	/**
	 * Show the form for editing the specified crop.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$crop = $this->crop->find($id);

		return View::make('crops.edit', compact('crop'));
	}

	/**
	 * Update the specified crop in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$crop = $this->crop->findOrFail($id);

		$validator = Validator::make($data = Input::all(), $this->crop->$rules);

		if ($validator->fails())
		{
			return Redirect::back()
				->withErrors($validator)
				->withInput();
		}

		$crop->update($data);

		return Redirect::route('crops.index');
	}

	/**
	 * Remove the specified crop from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->crop->destroy($id);

		return Redirect::route('crops.index');
	}

}
