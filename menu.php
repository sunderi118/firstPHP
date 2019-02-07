<?php

//クラス..設計図
//プロパティとメソッドを持つ
class Menu {

  //プロパティ..dataを入れる箱
  // public..誰でも使えるprivate..classの外からアクセスできない
  // プロパティには初期値を設定出来ます
  private $name;
  private $price;
  private $image;
  private $orderCount = 0;
  // メソッド..関数
  //コンストラクタ..生成時に自動で発生するメソッド
  public function __construct($name,$price,$image) {
    //生成時に自動で変数にインスタンス変数に入る
    $this->name = $name;
    $this->price = $price;
    $this->image = $image;
  }

  public function hello() {
    echo '私は'.$this->name.'です';
  }

  public function getTaxIncludedPrice(){
    return floor($this->price *1.08);
  }

  public function getName(){
    return $this->name;
  }

  public function getImage(){
    return $this->image;
  }

  public function getOrderCount(){
    return $this->orderCount;
  }

  // 個数を設定する
  public function setOrderCount($orderCount){
    $this->orderCount = $orderCount;
  }
  // 合計を出す
  public function getTotalPrice(){
    // 単価*個数
    return $this->getTaxIncludedPrice() * $this->$orderCount;
  }
}
?>
