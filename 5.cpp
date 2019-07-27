// Example program
using namespace std;
#include <iostream>
#include <string>

void drawline(int length,string word){
    int i,j;
    for (i = 0; i < length; i++) { 
        for(j = 0; j < length;j++){
            if(i==j){
                cout << word[i];
            }
            else{
                cout<<" ";
            }
        }
        cout<<"\n";
    }
}
int main ()
{
  string str;
  int length,i;
  cout<<"Masukkan kata : ";cin>>str;
  length= str.length();
  drawline(length,str);
}