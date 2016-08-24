<div id="issuetemplate" class="section">
	<h2 class="inlineblock"><?php p($l->t('Issue reporting')); ?></h2>
	<p><?php p($l->t("Thanks for reporting issues back to Nextcloud! This is the issue tracker of Nextcloud, if you have any support question please check out")); ?> <a href="https://nextcloud.com/support">https://nextcloud.com/support</a><br />
		<?php p($l->t("This is the bug tracker for the Server component. Find other components at")); ?> <a href="https://github.com/nextcloud/">https://github.com/nextcloud/</a><br />
		<?php p($l->t("For reporting potential security issues please see")); ?> <a href="https://nextcloud.com/security/">https://nextcloud.com/security/</a><br />
		<?php p($l->t("To make it possible for us to help you please fill out below information carefully.")); ?><br />
	</p>
	<textarea id="issue-description" style="width: 100%; height:200px;">### Steps to reproduce
1.
2.
3.

### Expected behaviour
Tell us what should happen

### Actual behaviour
Tell us what happens instead</textarea>
	<p><strong><?php p($l->t("Please always check if the automatically filled out information is correct and there is nothing important missing, before reporting the issue.")); ?></strong></p>
	<form method="GET" action="https://github.com/nextcloud/server/issues/new">
	<textarea id="issue-serverinfo"><?php p($_['issueTemplate']); ?></textarea>
	<input type="submit" value=" <?php p($l->t("File a new issue on GitHub")); ?> " id="submit-issue" />
		<p><strong>You need to have an account at GitHub to submit an issue!</strong></p>
	</form>
</div>

<script>

</script>