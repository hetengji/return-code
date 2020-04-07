规范后端 通用返回码
```php
    /**
     * Notes: 统一数据返回格式
     * author XXXX
     * Date: 2019/8/8
     * Time: 10:14
     * @param int $code
     * @param string $msg
     * @param array $data
     * @return \Illuminate\Http\JsonResponse
     */
    public function buildResponse($code = 200, $msg = '操作成功', $data=[],$jsonp='') {
        $res = array(
            "meta" => array("code"=>$code,"message"=>$msg,"callback"=>"bamaso"),
            "data" => $data
        );
        if (!$jsonp) {
            return response()->json($res);
        } else {
            return response()->json($res)->setCallback($jsonp);
        }
    }
    /**
     * Notes:课程首页信息获取
     * author XXXX
     * Date: 2019/8/14
     * Time: 11:32
     * @return \Illuminate\Http\JsonResponse
     */
    public function course()
    {
        $data = $this->course->course();
        if ($data) {
            return $this->buildResponse(ReturnCode::SUCCESS, ReturnCode::errorCode(ReturnCode::SUCCESS), $data);
        }
        return $this->buildResponse(ReturnCode::NOT_EXISTS , ReturnCode::errorCode(ReturnCode::NOT_EXISTS), '');
    }
```
   