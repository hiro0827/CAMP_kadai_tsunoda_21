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
                this.coin500 += count;
                break;

            case 100:
                this.coin100 += count;
                break;

            case 50:
                this.coin50 += count;
                break;

            case 10:
                this.coin10 += count;
                break;

            case 5:
                this.coin5 += count;
                break;

            case 1:
                this.coin1 += count;
                break;
        }
    }

//硬貨のカウント
        public int GetCount(int category){
            switch (category){

                case 500:
                    return this.coin500;
                case 100:
                    return this.coin100;
                case 50:
                    return this.coin50;
                case 10:
                    return this.coin10;
                case 5:
                    return this.coin5;
                case 1:
                    return this.coin1;
            }
            return 0;
        }

//(AddCoinでカウントした数値 * 金額) * 種類をreturnで返す
        public int GetAmount () {
            int amount = (this.coin500 * 500)
                            + (this.coin100 *100)
                            + (this.coin50 *50)
                            + (this.coin10 *10)
                            + (this.coin5 *5)
                            + (this.coin1);
            return amount;
        }
}





