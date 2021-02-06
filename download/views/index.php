<section class="uk-section uk-section-xsmall uk-padding-remove slider-section">
  <div class="uk-background-cover uk-height-small header-section"></div>
</section>
<section class="uk-section uk-section-xsmall main-section" data-uk-height-viewport="expand: true">
	<div class="uk-container">
		<div class="uk-grid uk-grid-medium" data-uk-grid>
			<div class="uk-width-1-4@m">
				<ul class="uk-nav uk-nav-default myaccount-nav">
					<?php if($this->wowmodule->getUCPStatus() == '1'): ?>
					<li><a href="<?= base_url('panel'); ?>"><i class="fas fa-user-circle"></i> <?= $this->lang->line('tab_account'); ?></a></li>
					<?php endif; ?>
					<li class="uk-nav-divider"></li>
					<?php if($this->wowmodule->getDonationStatus() == '1'): ?>
					<li><a href="<?= base_url('donate'); ?>"><i class="fas fa-hand-holding-usd"></i> <?=$this->lang->line('navbar_donate_panel'); ?></a></li>
					<?php endif; ?>
					<?php if($this->wowmodule->getVoteStatus() == '1'): ?>
					<li><a href="<?= base_url('vote'); ?>"><i class="fas fa-vote-yea"></i> <?=$this->lang->line('navbar_vote_panel'); ?></a></li>
					<?php endif; ?>
					<?php if($this->wowmodule->getStoreStatus() == '1'): ?>
					<li><a href="<?= base_url('store'); ?>"><i class="fas fa-store"></i> <?=$this->lang->line('tab_store'); ?></a></li>
					<?php endif; ?>
					<li class="uk-nav-divider"></li>
					<?php if($this->wowmodule->getBugtrackerStatus() == '1'): ?>
					<li><a href="<?= base_url('bugtracker'); ?>"><i class="fas fa-bug"></i> <?=$this->lang->line('tab_bugtracker'); ?></a></li>
					<?php endif; ?>
					<li class="uk-active"><a href="<?= base_url('download'); ?>"><i class="fas fa-download"></i> Download</a></li>
					<?php if($this->wowmodule->getChangelogsStatus() == '1'): ?>
					<li><a href="<?= base_url('changelogs'); ?>"><i class="fas fa-scroll"></i> <?=$this->lang->line('tab_changelogs'); ?></a></li>
					<?php endif; ?>
				</ul>
			</div>
			<div class="uk-width-3-4@m">
				<div class="uk-width-auto">
					<h4 class="uk-h4 uk-text-uppercase uk-text-bold">Download</h4>
				</div>
				<div class="uk-width-expand@s">
					<?php foreach($this->download_model->getFilesList()->result() as $files): ?>
						<div style="padding: 0px 0px 17px;">
							<div class="uk-card uk-card-default uk-card-body">
								<div class="uk-grid uk-grid-small" data-uk-grid>
									<div class="uk-width-1-6@s">
										<div class="Author uk-flex uk-flex-center">
											<div style="padding-bottom:6px;">
												<img src="<?= base_url('assets/images/forums/wow-icons/'.$files->image); ?>" alt="" width="50" height="50" />
											</div>
										</div>
										<p class="uk-text-bold uk-text-center uk-margin-remove"><?= $files->file_name ?></p>
										<p class="uk-margin-remove uk-text-meta uk-text-center"><?= $files->weight ?></p>
										<div class="author-rank-staff"><i class="fas fa-file-archive"></i> <?= $files->type ?></div>
									</div>
									<div class="uk-width-expand@s">
										<h5 class="uk-h5 uk-text-uppercase uk-text-bold"><?= $files->title ?></h5>
										<?= $files->description ?>
										<div class="uk-margin-small-top uk-margin-remove-bottom">
											<a class="uk-button uk-label-success uk-button-small" href="<?= $files->url ?>" target="_blank"><i class="fas fa-download"></i> Download</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>