<?

require_once dirname(__FILE__) . '/object.php';

class SSAudience extends SSObject
{
	
	function class_name () { return 'Audience'; }
	
	function find ($type, $options = array())
	{
		$res = &SSResource::resource();
		return $res->find('Audience', $type, $options);
	}
	
	function create () { return false; }
	function destroy () { return false; }
	
}

?>