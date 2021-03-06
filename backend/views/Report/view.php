<?php

use yii\helpers\Html;

$this->title = 'Tipo de Reporte: ' . $model->report_name;

$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Reports'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

$count = 1;

?>

<div class="report-view">
    <h1 class="text-center"><?= Html::encode($this->title) ?></h1>

    <div class="container text-center py-2">

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nº Doc</th>
                        <th scope="col">Materia</th>
                        <th scope="col">Cond</th>
                        <th scope="col">Res</th>
                        <th scope="col">Nota</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Libro</th>
                        <th scope="col">Acta</th>
                        <th scope="col">Fo</th>
                        <th scope="col">Re</th>
                        <th scope="col">Re. F</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($data as $r) { ?>
                        <tr>
                            <th scope="row"><?php echo $r['nro_documento'] ?></th>
                            <td><?php echo $r['materia'] ?></td>
                            <td><?php echo $r['cond_regularidad'] ?></td>
                            <td><?php echo $r['resultado'] ?></td>
                            <td><?php echo $r['nota'] ?></td>
                            <td><?php echo $r['fecha'] ?></td>
                            <td><?php echo $r['nro_libro'] ?></td>
                            <td><?php echo $r['nro_acta'] ?></td>
                            <td><?php echo $r['folio'] ?></td>
                            <td><?php echo $r['renglon'] ?></td>
                            <td><?php echo $r['renglones_folio'] ?></td>
                        </tr>

                        <?php if ($count == 10) { break; } else { $count++; } ?>
                    <?php } ?>

                </tbody>
            </table>
        </div>

    </div>

</div>