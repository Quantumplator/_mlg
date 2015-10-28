<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Marchese
 */

?>
    </div><!-- .content-container -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<div id="disclaimer" class="site-disclaimer"><strong>Disclaimer:</strong> The information you obtain at this site is not, nor is it intended to be, legal advice. You should consult an attorney for advice regarding your individual situation. We invite you to contact our office and we welcome your calls, letters and electronic mail. Contacting us does not create an attorney-client relationship. Please do not send any confidential information to us until such time as an attorney-client relationship has been established. Marchese Law Group is a debt relief agency. We help people file for bankruptcy relief under the Bankruptcy Code.</div>
			<div id="footer-address" class="site-address">
				<ul>
					<li>FAX: (805) 541-5412</li>
					<li>873 A Santa Rosa Street</li>
					<li>San Luis Obispo, CA 93401</li>
					<li><?php _mlg_social_menu(); ?></li>
				</ul>
			</div>
		</div><!-- .site-info -->
		<div id="copyright" class="site-copyright">
			Copyright &copy; <?php echo date('Y'); ?> Marchese Law Group
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>