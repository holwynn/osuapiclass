<?php 

class Osu
{
	private $key = '';
	public $apiurl;

	public function __construct($key)
	{
		$this->key = $key;
		$this->apiurl = 'https://osu.ppy.sh/api/';
	}

	public function apiRequest($url)
	{
		$content = file_get_contents($url);
		$content = json_decode($content, true);
		return $content;
	}

	public function getUserStats($username, $mode = 0)
	{
		$url = $this->apiurl . 'get_user?u='. $username . '&m=' . $mode . '&k=' . $this->key;
		return $this->apiRequest($url);
		
	}

	public function getUserTopScores($username, $mode)
	{
		$url = $this->apiurl . 'get_user_best?u='. $username . '&m=' . $mode . '&k=' . $this->key;
		return $this->apiRequest($url);
	}

	public function getBeatmapSet($id)
	{
		$url = $this->apiurl . 'get_beatmaps?s='. $id . '&k=' . $this->key;
		return $this->apiRequest($url);
	}

	public function getBeatmapScores($id, $mode)
	{
		$url = $this->apiurl . 'get_scores?b='. $id . '&m=' . $mode . '&k=' . $this->key;
		return $this->apiRequest($url);
	}
}

?>
