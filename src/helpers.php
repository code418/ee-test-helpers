<?php

/**
 * Support accessing mocked global instance using get_instance() method
 */
function get_instance()
{
    return EETestHelpers\MockEETestListener::createMockEEInstance();
}

/**
 * Support accessing mocked global instance using ee() method introduced in 2.6
 */
function ee()
{
    return EETestHelpers\MockEETestListener::createMockEEInstance();
}


class CI_Model {

  function __construct()
  {

  }

  /**
  * __get
  *
  * Allows models to access CI's loaded classes using the same
  * syntax as controllers.
  *
  * @access private
  */
  function __get($key)
  {
    return Mockery::mock($key,array('select'=>null,'from'=>null,'get'=>null));
  }
}
// END Model Class

/* End of file Model.php */
/* Location: ./system/core/Model.php */
