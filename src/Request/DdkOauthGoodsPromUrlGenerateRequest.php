<?php
/**
 * //多多客：生成多多进宝推广链接
 */

namespace Xidiankeji\Pinduoduo\Request;


use Xidiankeji\Pinduoduo\AbstractInterface\Request;

class DdkOauthGoodsPromUrlGenerateRequest extends Request
{
    private $type = 'pdd.ddk.oauth.goods.prom.url.generate';


    private $pid;

    private $goodsIdList;

    private $generateShortUrl;

    private $multiGroup;

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setPid($pid)
    {
        $this->pid = $pid;
    }

    public function getPid()
    {
        return $this->pid;
    }

    public function setGoodsIdList($goodsIdList)
    {
        $this->goodsIdList = $goodsIdList;
    }

    public function getGoodsIdList()
    {
        return $this->goodsIdList;
    }

    public function setGenerateShortUrl($generateShortUrl)
    {
        $this->generateShortUrl = $generateShortUrl;
    }

    public function getGenerateShortUrl()
    {
        return $this->generateShortUrl;
    }

    public function setMultiGroup($multiGroup)
    {
        $this->multiGroup = $multiGroup;
    }

    public function getMultiGroup()
    {
        return $this->multiGroup;
    }

    public function getParams()
    {
        $params = [
            'type' => $this->type,
            'p_id' => $this->pid,
            'goods_id_list' => $this->goodsIdList,
            'generate_short_url' => $this->generateShortUrl,
            'multi_group' => $this->multiGroup
        ];

        return array_filter($params);
    }
}