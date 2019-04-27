<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\ProductRequest as StoreRequest;
use App\Http\Requests\ProductRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class productCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class productCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel(Product::class);
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/product');
        $this->crud->setEntityNameStrings('product', 'products');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
        $this->crud->setFromDb();
        $this->crud->addField([   // Browse
            'name'  => 'image',
            'label' => 'Selectionner une image',
            'type'  => 'image',
//            'tab'   => 'Uploads',
        ]);

        $this->crud->addField([
            'name'  => 'date',
            'label' => 'Date',
            'type'  => 'date',
            'date_picker_options' => [
                'todayBtn' => true,
                'format'   => 'dd-mm-yyyy',
                'language' => 'en',
            ],
        ]);

//        $this->crud->addField([ // base64_image
//            'label'        => 'image',
//            'name'         => 'base64_image',
//            'filename'     => null, // set to null if not needed
//            'type'         => 'base64_image',
//            'aspect_ratio' => 1, // set to 0 to allow any aspect ratio
//            'crop'         => true, // set to true to allow cropping, false to disable
//            'src'          => null, // null to read straight from DB, otherwise set to model accessor function
////            'tab'          => 'Uploads',
//        ]);

        // add asterisk for fields that are required in productRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
