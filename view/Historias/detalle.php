<div class="container">
    <div class="row text-center" style="position:relative; top:50px;">
        <div class="col-12 border-bottom "><h1> Informacion De Historia</h1></div>
            <div class="col-4">
                <div class="row">
                    <div class="col-12"><h3>Documento</h3></div>
                    <div class="col-12"><h6><?=$id?></h6></div>
                </div>
            </div>
        
            <div class="col-4">
                <div class="row">
                    <div class="col-12"><h3>Nombre</h3></div>
                    <div class="col-12"><h6><?=$nombre?></h6></div>
                </div>
            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col-12"><h3>Apellido</h3></div>
                    <div class="col-12"><h6><?=$apellido?></h6></div>
                </div>
            </div>

            <div class="col-4">
                <div class="col-12"><h3>Telefono</h3></div>
                <div class="col-12"><h6><?=$telefono?></h6></div>
            </div>
            <div class="col-4">
                <div class="row">
                     <div class="col-12"><h3>Genero</h3></div>
                    <div class="col-12"><h6><?=$genero?></h6></div>
                </div>
            </div>
        
            <div class="col-4">
                <div class="col-12"><h3>Estrato</h3></div>
                <div class="col-12"><h6><?=$estrato?></h6></div>
            </div>

            <div class="col-12">
                <div class="col-12"><h3>Dirección</h3></div>
                <div class="col-12"><?=$direccion?></div>
            </div>
            
            <div class="row border-top" style="margin-top:10px">
                
                <div class="col-12" style="margin-top:10px">
                    <div class="row" >
                        <div class="col-12 text-start"><h3>Motivo de consulta</h3></div>
                        <div class="col-5 border rounded-end">
                            <div class="row">
                                <div class="col-12 text-start" style="padding:10px"><?=$hist_motv?></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-3 text-start" style="margin-top:10px ; ">
                    <div class="row">
                        <div class="col-12"><h5>Esfera OD</h5></div>
                        <div class="col-12 border rounded"><?=$hist_esfod?></div>
                    </div>
                </div>
                
                <div class="col-4 text-start" style="margin-top:10px ;margin-left:13px">
                    <div class="row">
                        <div class="col-12"><h5>Cilindro OD</h5></div>
                        <div class="col-12 border rounded"><?=$hist_cilod?></div>
                    </div>
                </div>
                <div class="col-4 text-start">
                    <div class="row"  style="margin-top:10px ; margin-left:4px">
                        <div class="col-12"><h5>Eje OD</h5></div>
                        <div class="col-12 border rounded"><?=$hist_ejeod?></div>
                    </div>
                </div>
                <div class="col-3 text-start" style="margin-top:10px ; ">
                    <div class="row">
                        <div class="col-12"><h5>Esfera OI</h5></div>
                        <div class="col-12 border rounded"><?=$hist_esfoi?></div>
                    </div>
                </div>
                
                <div class="col-4 text-start" style="margin-top:10px ;margin-left:13px">
                    <div class="row">
                        <div class="col-12"><h5>Cilindro OI</h5></div>
                        <div class="col-12 border rounded"><?=$hist_ciloi?></div>
                    </div>
                </div>
                <div class="col-4 text-start">
                    <div class="row"  style="margin-top:10px ; margin-left:4px">
                        <div class="col-12"><h5>Eje OI</h5></div>
                        <div class="col-12 border rounded"><?=$hist_ejeoi?></div>
                    </div>
                </div>

                <div class="col-6" style="margin-top: 10px;">
                    <div class="row">
                        <div class="col-12">
                            <div class="col-12 text-start"><h5>Diagnostico Ojo Derecho</h5></div>
                            <div class="col-5 border rounded text-start" style="padding-left:10px; padding-top:5px"><h6><?=$hist_diaod?></h6></div>
                        </div>
                    </div>
                </div>
                <div class="col-6" style="margin-top: 10px;">
                    <div class="row">
                        <div class="col-12">
                            <div class="col-12 text-end"><h5>Diagnostico Ojo Derecho</h5></div>
                            <div class="col-12 border rounded text-end" style="margin-left: 315px; width:300px; padding-right: 30px; padding-top: 5px"><h6><?=$hist_diaod?></h6></div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 text-start" style="padding-top:15px ;"><h4>Recomendaciones</h4></div>
                        <div class="col-12 border rounded text-start" style="padding-top:10px ;"><h6><?=$hist_recom?></h6></div>
                    </div>
                </div>

        </div>
        </div>
    </div>    
</div>
