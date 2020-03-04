M_new(M,x){
    randomly select 4 inputs that are not x as x2, x3, x4, and x5;
    if (x==x2 || x==x3 || x==x4 || x=x5){
        return 1;
    }
    else if (x!=x){
        return 0;
    }
    M(x);
    return 1;
}
