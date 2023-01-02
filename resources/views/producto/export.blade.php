                            <table >
                                <thead>
                                    <tr>
                                        
										<th>Nombre o Codigo Producto</th>
										<th>Bodega</th>
										<th>Unidad</th>
										<th>Ubicación</th>
										<th>Pareja Conteo 1</th>
										<th>Conteo 1</th>
										<th>Pareja Conteo 2</th>
										<th>Conteo 2</th>
										<th>Diferencia Conteo 1 y 2</th>
										<th>Conteo 3</th>
										<th>Ancho (Vidrio)</th>
										<th>Alto (Vidrio)</th>
										<th>Longitud (Perfileria)</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($producto as $producto)
                                            <tr>
											<td>{{ $producto->codigo->codigo }}</td>
											<td>{{ $producto->bodega->name }}</td>
											<td>{{ $producto->unidad->name }}</td>
											<td>{{ $producto->ubicacione->name }}</td>
                                            @if ($producto->pareja_id == 0 || $producto->pareja_id == null)
                                            <td>{{ "NA" }}</td>
                                            @else
                                            <td>{{ $producto->pareja->name }}</td>
                                            @endif
											<td>{{ $producto->conteo1 }}</td>
                                            @if ($producto->parejat_id == 0 || $producto->parejat_id == null)
                                            <td>{{ "NA" }}</td>
                                            @else
                                            <td>{{ $producto->parejaone->name }}</td>
                                            @endif
											<td>{{ $producto->conteo2 }}</td>
											<td>{{ $producto->deferencia12 }}</td>
											<td>{{ $producto->conteo3 }}</td>
											<td>{{ $producto->ancho }}</td>
											<td>{{ $producto->alto }}</td>
											<td>{{ $producto->cantidad }}</td>
                        </tr>
 
                                    @endforeach
                                </tbody>
                            </table>