<?php
/**
 * Displays the post header
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

			var_dump(http_response_code());
			$navegador = $_SERVER['HTTP_USER_AGENT'];
			echo ("<br> Navegador Completo:". ($navegador));
			function get_browser_name($navegador)
				{
					if (strpos($navegador, 'Opera')) return 'Opera';
					elseif (strpos($navegador, 'Edge')) return 'Edge';
					elseif (strpos($navegador, 'Chrome')) return 'Chrome';
					elseif (strpos($navegador, 'Safari')) return 'Safari';
					elseif (strpos($navegador, 'Firefox')) return 'Firefox';
					elseif (strpos($navegador, 'MSIE')) return 'Internet Explorer';
					return 'Other';
				}
					print ("<br> Navegador:");
					echo (get_browser_name($navegador). "<br>");
			
					print("<h1 align='center'style='color:DodgerBlue'>Datos Personales:</h1>");
						echo('<table align="center" border=1 style="color:Blue;">');
						echo '<tr>';   
						echo '<th>CÉDULA</th>';
						echo '<th>NOMBRE</th>';
						echo '<th>APELLIDO</th>';
						echo '<th>ASIGNATURA</th>';
						echo '<th>CIUDAD</th>';
						echo '<th>PROGRAMA DE MAESTRÍA</th>';
						echo '<th>FECHA DE PRESENTACIÓN DEL TRABAJO</th>';
						echo '<th>TÍTULO DE TERCER NIVEL DEL AUTOR</th>';
						echo '</tr>'; 
        			
						if (file_exists('Estudiantes.xml')) {
							$xml = simplexml_load_file('Estudiantes.xml');
							echo '<tr>';   
							echo '<td>'.$xml->estudiante[0]->cedula.'</td>';
							echo '<td>'.$xml->estudiante[0]->nombre.'</td>';
							echo '<td>'.$xml->estudiante[0]->apellido.'</td>';
							echo '<td>'.$xml->estudiante[0]->asignatura.'</td>';
							echo '<td>'.$xml->estudiante[0]->ciudad.'</td>';
							echo '<td>'.$xml->estudiante[0]->maestria.'</td>';
							echo '<td>'.$xml->estudiante[0]->fecha.'</td>';
							echo '<td>'.$xml->estudiante[0]->titulo.'</td>';
							echo '</tr>';
							echo '</table>';
																	
						}
			

$entry_header_classes = '';

if ( is_singular() ) {
	$entry_header_classes .= ' header-footer-group';
}

?>

<header class="entry-header has-text-align-center<?php echo esc_attr( $entry_header_classes ); ?>">

	<div class="entry-header-inner section-inner medium">

		<?php
		/**
		 * Allow child themes and plugins to filter the display of the categories in the entry header.
		 *
		 * @since Twenty Twenty 1.0
		 *
		 * @param bool Whether to show the categories in header. Default true.
		 */
		$show_categories = apply_filters( 'twentytwenty_show_categories_in_entry_header', true );

		if ( true === $show_categories && has_category() ) {
			?>

			<div class="entry-categories">
				<span class="screen-reader-text"><?php _e( 'Categories', 'twentytwenty' ); ?></span>
				<div class="entry-categories-inner">
					<?php the_category( ' ' ); ?>
				</div><!-- .entry-categories-inner -->
			</div><!-- .entry-categories -->

			<?php
		}

		if ( is_singular() ) {
			the_title( '<h1 class="entry-title">', '</h1>' );
		} else {
			the_title( '<h2 class="entry-title heading-size-1"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
		}

		$intro_text_width = '';

		if ( is_singular() ) {
			$intro_text_width = ' small';
		} else {
			$intro_text_width = ' thin';
		}

		if ( has_excerpt() && is_singular() ) {
			?>

			<div class="intro-text section-inner max-percentage<?php echo $intro_text_width; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static output ?>">
				<?php the_excerpt(); ?>
			</div>

			<?php
		}

		// Default to displaying the post meta.
		twentytwenty_the_post_meta( get_the_ID(), 'single-top' );
		?>

	</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
