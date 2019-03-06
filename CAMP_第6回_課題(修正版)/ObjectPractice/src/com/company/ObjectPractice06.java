package com.company;
import java.util.Scanner;

public class ObjectPractice06 {
    public static void main(String[] args){

        System.out.println("金額の計算を始めます。\n");
        System.out.println("硬貨の種類は500,100,50,10,5,1のいずれかを入力して下さい。");
        System.out.println("それ以外の数値は計算されません。\n");

        CoinCase coin =new CoinCase(); //class CoinCase読み込み

        Scanner sc =new Scanner(System.in);
        for(int i=0; i<6; i++){

            //Scannerで入力 -> 入力値をInteger.parseInt(Scannerの入力結果)でintに変換
            //文字列が入力された場合はエラー

            try {
                System.out.println("硬貨の種類を入力して下さい");
                String type =sc.nextLine();

                System.out.println("硬貨の枚数を入力して下さい");
                String count =sc.nextLine();
                System.out.println();

                coin.AddCoins(Integer.parseInt(type), Integer.parseInt(count));

            }catch (NumberFormatException e){
                System.out.println("500,100,50,10,5,1のいずれかを入力して下さい");
            }
        }

        //各硬貨の枚数表示
        System.out.println(
                "500円は" + coin.GetCount(500) + "枚 "
                        + "100円は" + coin.GetCount(100) + "枚 "
                        + "50円は" + coin.GetCount(50) + "枚 "
                        + "10円は" + coin.GetCount(10) + "枚 "
                        + "5円は" + coin.GetCount(5) + "枚 "
                        + "1円は" + coin.GetCount(1) + "枚 "
        );

        //総額を表示
        coin.GetAmount();
        System.out.println("総額は【" + coin.GetAmount() +"】円です");

    }
}
