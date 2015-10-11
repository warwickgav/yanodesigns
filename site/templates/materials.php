<?php snippet('head') ?>
<?php snippet('header') ?>
	<main class="site-content" role="main">
        <div class="container">
            <div class="page-header">
                <h1 class="page-title"><?php echo $page->title()->html() ?></h1>
	            <?php echo $page->text()->kirbytext() ?>
            </div>

			<div class="page-content">
				<?php foreach($page->children() as $material): ?>
					<div class="section">
						<h3><?php echo $material->title() ?></h3>
						<?php echo $material->text() ?>
						<table class="table table-striped table-materials">
							<thead>
								<tr>
									<th class="text-left">Material</th>
									<th class="text-center">Sheet Size (mm)</th>
									<th class="text-center">Thickness (mm)</th>
									<th class="text-center">Cost (per sheet)</th>
									<th class="text-center">Availability</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($material->children() as $type): ?>
									<tr>
										<th scope="row" class="text-left">
											<span class="title"><?php echo $type->title() ?></span>
											<?php if ($type->type()): ?>
												<br><span class="material-type"><?php echo $type->type() ?></span>
											<?php endif ?>
										</th>
										<td class="text-center"><?php echo $type->thickness() ?>mm</td>
										<td class="text-center"><?php echo $type->sheet() ?>mm</td>
										<td class="text-center"><?php echo $type->cost() ?></td>
										<?php if($type->availability() == 'Y'): ?>
											<td class="text-center in-stock ">In Stock</td>
										<?php else: ?>
											<td class="text-center by-request">By Request</td>
										<?php endif ?>
									</tr>
								<?php endforeach ?>
							</tbody>
						</table>
					</div>
				<?php endforeach ?>
			</div>
        </div>
  </main>
<?php snippet('footer') ?>