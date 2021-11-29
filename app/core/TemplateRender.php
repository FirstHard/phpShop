<?php

	class TemplateRender {

		public $quantities;

		public function __construct(string $template, array $params, string $layout) {
			extract($params);
			$this->quantities = $quantities;
			$templates = glob(ROOT . '/app/views/partials/*.php');
			foreach ($templates as $tpl) {
				$tpl_name = pathinfo($tpl, PATHINFO_FILENAME);
				if ($tpl_name == 'asaid' && $showAside == 0) {
					continue;
				}
				ob_start();
				include($tpl);
				${$tpl_name."_content"} = ob_get_contents();
				ob_end_clean();
			}
			ob_start();
			include (ROOT . '/app/views/' . $template . '.php');
			$main_content = ob_get_contents();
			ob_end_clean();
			return include(ROOT . '/app/views/layouts/' . $layout . '.php');
		}

		public function getQuantity($product_id) {
			foreach ($this->quantities as $row) {
				if ($row['product_id'] == $product_id) {
					return $row['quantity'];
				}
			}
			return false;
		}
	}