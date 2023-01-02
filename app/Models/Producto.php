<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $name_id
 * @property $bodega_id
 * @property $grupo_id
 * @property $unidad_id
 * @property $ubicacion_id
 * @property $created_at
 * @property $updated_at
 * @property $pareja_id
 * @property $conteo1
 * @property $parejat_id
 * @property $conteo2
 * @property $deferencia12
 * @property $conteo3
 * @property $ancho
 * @property $alto
 * @property $cantidad
 *
 * @property Bodega $bodega
 * @property Codigo $codigo
 * @property Grupo $grupo
 * @property Parejaone $parejaone
 * @property Pareja $pareja
 * @property Ubicacione $ubicacione
 * @property Unidade $unidade
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'name_id' => 'required',
		'bodega_id' => 'required',
		//'grupo_id' => 'required',
		'unidad_id' => 'required',
		'ubicacion_id' => 'required',
		//'pareja_id' => 'required',
		//'parejat_id' => 'required',
	//	'conteo1' => 'required',
	//	'conteo2' => 'required',
	//	'deferencia12' => 'required',
	//	'conteo3' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name_id','bodega_id','grupo_id','unidad_id','ubicacion_id','pareja_id','conteo1','parejat_id','conteo2','deferencia12','conteo3','ancho','alto','cantidad'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function bodega()
    {
        return $this->hasOne('App\Models\Bodega', 'id', 'bodega_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function codigo()
    {
        return $this->hasOne('App\Models\Codigo', 'id', 'name_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function grupo()
    {
        return $this->hasOne('App\Models\Grupo', 'id', 'grupo_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function parejaone()
    {
        return $this->hasOne('App\Models\Parejaone', 'id', 'parejat_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pareja()
    {
        return $this->hasOne('App\Models\Pareja', 'id', 'pareja_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ubicacione()
    {
        return $this->hasOne('App\Models\Ubicacione', 'id', 'ubicacion_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function unidad()
    {
        return $this->hasOne('App\Models\Unidade', 'id', 'unidad_id');
    }
    

}
