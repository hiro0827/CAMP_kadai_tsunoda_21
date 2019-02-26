package com.company;

import java.util.Scanner;

public class colLesson01 {
    public static void main(String[] args) {

        //メソッド読み込み用
        Word word =new Word();

        //データ登録用の配列
        String[] data =new String[10];

        //while用
        int i = 0;

        //単語と意味の入力*配列数
        do {
            Scanner sc = new Scanner(System.in);
            String input_word = sc.next();
            String input_mean = sc.next();

            Word wordData =new Word(input_word, input_mean);

            System.out.println("次の単語と意味を入力して下さい。eで終了します。");
            i++;

            if(input_word.contains("e")){
                break;
            }


        } while (i < data.length);{
        }

        //登録情報の出力
        if(data[i].contains("e")){
            for(int j=0; j<data.length; j++){

            }
        }

    }
}