<?php

namespace CodeGreenCreative\SamlIdp\Http\Controllers\Saml;

use App\Http\Controllers\Controller;

class MetadataController extends Controller
{
    /**
     * [getMetadata description]
     *
     * @return [type] [description]
     */
    public function index()
    {
        return view('samlidp::metadata');
    }
}
