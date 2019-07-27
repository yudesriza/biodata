// Example program
using namespace std;
#include <iostream>

int bilang(int row,int col){
    int batas,a,b,mod,i,j;
    batas=1000;
    i=1;
    j=1;
    
    for (a=2;a<=batas;a++){
        mod=1;
        for (b=2;b<a;b++){
            if(a%b==0){
                mod=0;
            }
        }
        if(mod==1){
            if(j<col){
                cout<<a<<", ";
                j++;
            }
            else{
                cout<<a<<",\n";
                j=1;
                i++;
            }
            
            if(i>row){
                a=batas;
            }
            
        }
    }
    
}

int main()
{
    int baris,kolom;
    cout<<"Masukkan batas baris = ";cin>>baris;
    cout<<"\nMasukkan batas kolom = ";cin>>kolom;
    
    bilang(baris,kolom);
}

