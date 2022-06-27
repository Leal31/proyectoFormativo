<div class="mt-5">
    <h3 class="display-4">Detalles de Paciente</h3>
</div>
<div class="mt-5">
            <?php
		foreach ($pacientes as $pac){
		    ?>
		    <table class="table">
			<tbody>
			    <tr>
				<th>Id</th>
				<td><?=$pac['pac_id']?></td>
				<th>Nombre</th>
				<td><?=$pac['pac_nombre']?></td>
				<th>Apellidos</th>
				<td><?=$pac['pac_apellido']?></td>
			    </tr>
			    <tr>
				<th>Telefono</th>
				<td><?=$pac['pac_telefono']?></td>
				<th>Direccion</th>
				<td><?=$pac['pac_direccion']?></td>
				<th>Genero</th>
				<td><?=$pac['gen_nombre']?></td>
			    </tr>
			    <tr>
				<th>Estrato</th>
				<td colspan="5"><?=$pac['estr_nombre']?></td>
			    </tr>
			    <tr>
				<th colspan="6"><center>Hobbies</center></th>
				<?php
				    foreach($hobbies as $hob){
					?>
					<tr>					
					    <td colspan="6"><?=$hob['hob_nombre']?></td>
					</tr>
					<?php
				    }
				?>
			    </tr>
				<tr>
					<th colspan="6"><center>Historia Clinica</center></th>
					<?php
						foreach($historia as $hist){
							?>
								<tr>
									<th>Id Historia</th>
									<td><?=$hist['hist_id']?></td>
									<th>Motivo</th>
									<td colspan="3"><?=$hist['hist_motv']?></td>
								</tr>
								<tr>
									<th colspan="2">Esfera Ojo Derecho</th>
									<th colspan="2">Circunferencia Ojo Derecho</th>
									<th colspan="2">Eje Ojo Derecho</th>
								</tr>
								<tr>
									<td colspan="2"><?=$hist['hist_esfod']?></td>
									<td colspan="2"><?=$hist['hist_cilod']?></td>
									<td colspan="2"><?=$hist['hist_ejeod']?></td>
								</tr>
								<tr>
									<th colspan="2">Esfera Ojo Izquierdo</th>
									<th colspan="2">Circunferencia Ojo Izquierdo</th>
									<th colspan="2">Eje Ojo Izquierdo</th>
								</tr>
								<tr>
									<td colspan="2"><?=$hist['hist_esfoi']?></td>
									<td colspan="2"><?=$hist['hist_ciloi']?></td>
									<td colspan="2"><?=$hist['hist_ejeoi']?></td>
								</tr>
								<tr>
									<th>Diametro Ojo Derecho</th>
									<td colspan="2"><?=$hist['hist_diaod']?></td>
									<th>Diametro Ojo Izquierdo</th>
									<td colspan="2"><?=$hist['hist_diaoi']?></td>
								</tr>
								<tr>
									<th colspan="6">Recomendaciones</th>
								</tr>
								<tr>
									<td colspan="6"><?=$hist['hist_recom']?></td>
								</tr>
							<?php
						}
					?>
				</tr>
				<?php
					foreach($recetario as $rec){
					if($rec['rec_id']!=NULL){
						?>
						<tr>
							<th colspan="6"><center>Recetario</center></th>
									<tr>
										<th>Id Recetario:</th>
										<td colspan="2"><?=$rec['rec_id']?></td>
										<th>Id Historia:</th>
										<td colspan="2"><?=$rec['hist_id']?></td>
									</tr>
									<tr>
										<th>Fecha Recetario:</th>
										<td colspan="6"><?=$rec['rec_fecha']?></td>
									</tr>
									<tr>
										<th colspan="6">Recetario</th>
									</tr>
									<tr>
										<td colspan="6"><?=$rec['rec_observacion']?></td>
									</tr>
						</tr>
						<?php
					}
					}
				?>
				
			</tbody>
		    </table>
		    <?php
		}
            ?>
        </tbody>
    </table>
</div>
