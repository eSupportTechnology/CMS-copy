<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InquiryResource\Pages;
use App\Filament\Resources\InquiryResource\RelationManagers;
use App\Models\Inquiry;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use App\Models\Customer;
use App\Models\User;

class InquiryResource extends Resource
{
    protected static ?string $model = Inquiry::class;
    protected static ?string $navigationIcon = 'heroicon-o-question-mark-circle';
    protected static ?int $navigationSort = 2;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('customer_id')
                    ->label('Customer')
                    ->relationship('customer', 'name')
                    ->preload()
                    ->searchable()
                    ->required(),

                Select::make('inquiry_source')
                    ->options([
                        'phone' => 'Phone',
                        'whatsapp' => 'WhatsApp',
                        'email' => 'Email',
                        'website' => 'Website',
                    ])
                    ->required(),

                Textarea::make('description'),

                Select::make('assigned_to_user_id')
                    ->label('Assigned To')
                    ->relationship('assignedTo', 'name')
                    ->preload()
                    ->searchable(),

                Select::make('status')
                    ->options([
                        'new' => 'New',
                        'in_progress' => 'In Progress',
                        'quotation_sent' => 'Quotation Sent',
                        'proposal_sent' => 'Proposal Sent',
                        'waiting_for_response' => 'Waiting for Client',
                        'confirmed' => 'Confirmed',
                        'dropped' => 'Dropped',
                    ])
                    ->default('new'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->label('Inquiry ID')->sortable(),
                TextColumn::make('customer.name')->label('Customer'),
                TextColumn::make('inquiry_source')->sortable(),
                TextColumn::make('status')->badge(),
                TextColumn::make('assignedTo.name')->label('Assigned To'),
                TextColumn::make('created_at')->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListInquiries::route('/'),
            'create' => Pages\CreateInquiry::route('/create'),
            'edit' => Pages\EditInquiry::route('/{record}/edit'),
        ];
    }
}
