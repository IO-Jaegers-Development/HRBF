<?php
	/**
	 *
	 */
	namespace IOJaegers\HRBF\Network\URI\States;
	
	
	/**
	 *
	 */
	enum SecureConnectionState
	{
		/**
		 *
		 */
		case SECURE;
		
		/**
		 *
		 */
		case UNSECURE;
		
		/**
		 *
		 */
		case UNSUPPORTED;
		
		/**
		 *
		 */
		case NONE;
	}
?>