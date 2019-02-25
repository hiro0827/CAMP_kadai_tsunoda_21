package com.company;

public class CoinCase {

//コインの種別
    private int coin500;
    private int coin100;
    private int coin50;
    private int coin10;
    private int coin5;
    private int coin1;

//メソッド
//何にカウントするか判定する
    public void AddCoins(int category, int count) {
        switch (category) {

            case 500:
                coin500 += count;
                break;

            case 100:
                coin100 += count;
                break;

            case 50:
                coin50 += count;
                break;

            case 10:
                coin10 += count;
                break;

            case 5:
                coin5 += count;
                break;

            case 1:
                coin1 += count;
                break;
        }
    }

//硬貨のカウント
        public int GetCount(int category){
            switch (category){

                case 500:
                    return coin500;
                case 100:
                    return coin100;
                case 50:
                    return coin50;
                case 10:
                    return coin10;
                case 5:
                    return coin5;
                case 1:
                    return coin1;
            }
            return 0;
        }

//(AddCoinでカウントした数値 * 金額) * 種類をreturnで返す
        public int GetAmount () {
            int amount = (coin500 * 500)
                            + (coin100 *100)
                            + (coin50 *50)
                            + (coin10 *10)
                            + (coin5 *5)
                            + (coin1);
            return amount;
        }
}





