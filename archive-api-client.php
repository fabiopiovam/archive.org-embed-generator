<?php
class ArchiveApiClient {
    
    public $my_bookmarks;
    public $bookmarks_store_dir;
    public $bookmarks_store_filename;
    
    function __construct(){
        $this->set_my_bookmarks('http://archive.org/bookmarks/Radio%20da%20Juventude');
        $this->bookmarks_store_dir      = __DIR__ . '/storage/';  //if you don't have, create this directory with 777 permission
        $this->bookmarks_store_filename = 'bookmarks-' . date('Y-m-d') . '.json';
    }
    
    private function _get_json($url){
        $cURL = curl_init($url);
        curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);
        $json = curl_exec($cURL);
        curl_close($cURL);
        
        return $json;
    }
    
    public function set_my_bookmarks($url){
        $this->my_bookmarks = $url . '?output=json';
    }
    
    public function get_details_page($url){
        
        return $this->_get_json($url . '?output=json');
    }
    
    /*
     * Return json with bookmarks of url configured in 'set_my_bookmarks' function.
     * The json will be storaged every days in $this->bookmarks_store_dir to lessen requests on archive.org server. 
     * */
    public function get_my_bookmarks(){
        if (file_exists($this->bookmarks_store_dir . $this->bookmarks_store_filename)) 
            return file_get_contents($this->bookmarks_store_dir . $this->bookmarks_store_filename);
        
        $this->garbage_collection();
        
        $data = $this->_get_json($this->my_bookmarks);
        file_put_contents($this->bookmarks_store_dir . $this->bookmarks_store_filename, $data);
        
        return $data;
    }
    
    public function garbage_collection(){
        $dir = opendir($this->bookmarks_store_dir);

        while ($file = readdir($dir)) {
            if (in_array($file, array('.', '..'))) continue;
            unlink($this->bookmarks_store_dir . $file);
        }
        
        unset($dir);
    }
}