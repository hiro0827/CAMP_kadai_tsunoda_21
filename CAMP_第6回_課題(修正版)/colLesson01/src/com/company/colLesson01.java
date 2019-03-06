package com.company;

import java.util.Scanner;

public class colLesson01 {
    public static void main(String[] args) {

        Word word =new Word();

        //データ登録用の配列
        Word[] data =new Word[10];

        //while用
        int i = 0;

        //単語と意味の入力*配列数
        Scanner sc = new Scanner(System.in);

        do {
            String input_word =sc.next();

//          String[] dict =sc.split(" ");
//          Word wd =new Word(dict[0], dict[1])

            if(input_word.contains("e")){
                break;
            }

            String input_mean =sc.next();

            System.out.println("次の単語と意味を入力して下さい。eで終了します。");

            data[i] =new Word(input_word, input_mean);

            i++;
        } while (i < data.length);{
        }

        //登録情報の出力
            for(int j=0; j < i; j++){
                System.out.println("単語：" + data[j].word + " 意味：" +data[j].meaning);
            }
        System.out.println(i + "件、登録しました。");
        }

    }