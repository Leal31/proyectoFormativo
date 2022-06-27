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
