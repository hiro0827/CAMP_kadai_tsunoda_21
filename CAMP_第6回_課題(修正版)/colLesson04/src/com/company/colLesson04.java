package com.company;

import java.util.Scanner;
import java.util.ArrayList;

public class colLesson04 {
    public static void main(String[] args) {

        Word word =new Word();

        //データ登録用の配列
        ArrayList<Word> data =new ArrayList<>(5);

        //while用
        int i = 0;

        //単語と意味の入力*配列数
        Scanner sc = new Scanner(System.in);
        do {

            String input_word =sc.next();

            if(input_word.contains("e")){
                break;
            }

            String input_mean =sc.next();



            //5件以上を登録した際の例外処理
            try {
                data.add(new Word(input_word, input_mean));
                i++;

            }catch (ArrayIndexOutOfBoundsException e){
                System.out.println("\n登録制限を超えました。登録済みのデータは以下になります。\n");
                break;
            } //

            System.out.println("次の単語と意味を入力して下さい。eで終了します。");

        } while (i < 10);{
        }

        //登録情報の出力
        for(int j=0; j < i; j++){
            System.out.println("単語：" + data.get(j).word + " 意味：" +data.get(j).meaning);
        }
        System.out.println(i + "件、登録しました。");
    }

}