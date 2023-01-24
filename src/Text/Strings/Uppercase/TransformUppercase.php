<?php
    /**
     *
     */
    namespace IOJaegers\Hrbf\Text\Strings\Uppercase;

	
    /**
     * @throws \ErrorException
     */
    interface TransformUppercase
    {
		/**
		 * @param string $value
		 * @return string
		 */
        function transform(
			string $value
		): string;
    }
?>